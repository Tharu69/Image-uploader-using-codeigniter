<!DOCTYPE html>
<html lang="en">

<head>
    <title>Uploaded Images</title>
    <link rel="stylesheet" href="<?php echo base_url('css/common.css'); ?>">
</head>

<body>
    <p class="btnNavi"><?= anchor('upload', 'Upload File') ?></p>

    <?php foreach ($result->getResult() as $image) :
        
    ?>
        <div class="imageDiv">
            <a target="_blank" href="<?php echo base_url($image->FileName); ?>">
                <img src="<?php echo base_url($image->FileName); ?>" title="<?php echo $image->Title ?>">
            </a>
            <div class="imageTitle"><?php echo $image->Title ?></div>
        </div>
    <?php endforeach; ?>

</body>

</html>