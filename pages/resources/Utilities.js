var prevScrollpos = window.pageYOffset;
var autohideNav = true;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos)
    {   
        document.getElementById("navbar").style.top = "0";
        //console.log('reappear!!');
    }
    else if(autohideNav)
    {    
        document.getElementById("navbar").style.top = "-64px";
        //console.log('disappear!');
    }
    prevScrollpos = currentScrollPos;
}

function showActivities()
{
    let myElem = document.getElementById('activities-shortcut');
    let myClass = myElem.className;

    if(myClass.includes('scale-out'))
    {
        hideSearchBar();
        myClass = myClass.split('scale-out');
        myClass[1] = 'scale-in'
        myElem.className = myClass[0] + myClass[1];
    }
    else if(myClass.includes('scale-in'))
    {
        myClass = myClass.split('scale-in');
        myClass[1] = 'scale-out'
        myElem.className = myClass[0] + myClass[1];
    }
}
function hideActivities()
{
    let myElem = document.getElementById('activities-shortcut');
    let myClass = myElem.className;

    if(myClass.includes('scale-in'))
    {
        myClass = myClass.split('scale-in');
        myClass[1] = 'scale-out'
        myElem.className = myClass[0] + myClass[1];
    }
}

function showSearchBar()
{
    let myElem = document.getElementById('search-bar');
    let myClass = myElem.className;

    if(myClass.includes('scale-out'))
    {
        autohideNav=false;
        hideActivities();

        myClass = myClass.split('scale-out');
        myClass[1] = 'scale-in'
        myElem.className = myClass[0] + myClass[1];
    }
    else if(myClass.includes('scale-in'))
    {
        myClass = myClass.split('scale-in');
        myClass[1] = 'scale-out'
        myElem.className = myClass[0] + myClass[1];
        autohideNav=true;
    }
}
function hideSearchBar()
{
    let myElem = document.getElementById('search-bar');
    let myClass = myElem.className;

    if(myClass.includes('scale-in'))
    {
        myClass = myClass.split('scale-in');
        myClass[1] = 'scale-out'

        myElem.className = myClass[0] + myClass[1];
        autohideNav=true;
    }
}

$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown();
    $('.modal').modal();
    $('.collapsible').collapsible({ accordion:false });
    $('.tabs').tabs();
    $('.tooltipped').tooltip();
    $('.scrollspy').scrollSpy();
    $('select').formSelect();
})