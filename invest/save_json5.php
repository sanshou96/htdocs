<?php
$filename = "general5.json";
$event = $_GET["data"];
// read the file if present
$handle = @fopen($filename, 'r+');

// create the file if needed
if ($handle == null)
{
    $handle = fopen($filename, 'w+');
}

if ($handle)
{
    // seek to the end
    fseek($handle, 0, SEEK_END);

    // are we at the end of is the file empty
    if (ftell($handle) > 0)
    {
        // move back a byte
        fseek($handle, -1, SEEK_END);

        // add the trailing comma
        fwrite($handle, ',', 1);

        // add the new json string
        fwrite($handle, $event );
        fwrite($handle, ']');
    }
    else
    {
        // write the first event inside an array
        fwrite($handle, '[');
        fwrite($handle, $event);
        fwrite($handle, ']');
    }

        // close the handle on the file
        fclose($handle);
}
?>