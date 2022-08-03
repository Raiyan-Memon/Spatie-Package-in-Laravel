<?php

function myMessage($message, $alertType)
{
    echo '<div data-dismiss="alert" class="alert alert-' . $alertType . ' alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>' . $message . '</strong>
    </div>;';
}
