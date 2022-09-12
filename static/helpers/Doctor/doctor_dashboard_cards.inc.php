<?php
function generate_chamber_card($chamber_id, $region, $starts_at, $ends_at, $map_url)
{
    echo '<div class="card" style="margin: 15px;">
            <div class="card-body shadow">
                <h4 class="card-title" style="font-weight: 500;font-size: 20px;">Chamber # ' . $chamber_id . '</h4>
                <h6 class="text-muted card-subtitle mb-2"></h6>
                <div style="padding-top: 15px;">
                    <p><b>Chamber location: </b>' . $region . '</p>
                    <p><b>Starts at: </b>' . $starts_at . '</p>
                    <p><b>Ends at: </b>' . $ends_at . '</p>
                    <p><b>Map: </b> <a href="' . $map_url . '">' . $map_url . '</a></p>
                </div>
            </div>
        </div>';
}
