<?php
    class Parcel
    {
        private $height;
        private $length;
        private $width;
        private $weight;


        function __construct($pkg_height, $pkg_length, $pkg_width, $pkg_weight)
        {
            $this->height = $pkg_height;
            $this->length = $pkg_length;
            $this->width = $pkg_width;
            $this->weight = $pkg_weight;
        }

        function setHeight($new_height)
        {
            $this->height = $new_height;
        }
        function setLength($new_length)
        {
            $this->length = $new_length;
        }
        function setWidth($new_width)
        {
            $this->width = $new_width;
        }
        function setWeight($new_weight)
        {
            $this->weight = $new_weight;
        }
        function getHeight()
        {
            return $this->height;
        }
        function getLength()
        {
            return $this->length;
        }
        function getWidth()
        {
            return $this->width;
        }
        function getWeight()
        {
            return $this->weight;
        }

    }

    $parcel = new Parcel($_GET["height"], $_GET["length"], $_GET["width"], $_GET["weight"]);

    // $first_parcel = new Parcel("10in", "12in", "13in", "20lbs");
    //
    // $parcels = array($first_parcel);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Parcel Party!</title>
</head>
<body>
    <h1>Your parcel:</h1>
        <ul>
            <?php
                foreach ($parcel as $dimension) {
                    
                }
            ?>
        </ul>
</body>
</html>
