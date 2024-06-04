<?php

$data = [
    "1" => "ala ma kota",
    "2" => "chrzaszcz brzmi w trzcinie",
    "3" => "tes test",
    "4" => "halo mobilki",
];

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if (array_key_exists($id, $data)) {
        $item = $data[$id];

        $html = "
        <form 
            hx-post='./actions/get.php'
        >
            <input 
                type='text'
                name='text'
                value='{$item}' 
            />
            <button>Save</button>
        </form>
        ";
        echo $html;
        exit;
    }
    echo "<div class='actual-content'>Brak danych</div>";
    exit;
}

if (isset($_POST["text"])) {
    $text = $_POST["text"];

    echo "<div>Saved</div>";
}