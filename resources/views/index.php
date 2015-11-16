<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zip Address Util</title>
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap-theme.min.css">

</head>
<body>
<h1>Zip Address Util</h1>
<form name="search_form" method="get" action="/address/result">
    <input type="text" name="search" title="search" id="search" cols="30" rows="10">
    <button>検索</button>
</form>
<div label="result" id="result">
    <?php if (isset($results)) {
        foreach ($results as $addr) {
            /** @var App\Models\Address $addr */
            echo '<div><span>' . $addr->ken_name . $addr->city_name . $addr->town_name . $addr->town_memo . $addr->kyoto_street . $addr->block_name . '</span></div>';
        }
    } ?>
</div>
</body>
</html>
