<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="public/css/draw.css"/>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>LEDs play - Draw</title>
</head>
<body>
<div class="draw-container">
    <div class="toolbox">
        <div class="tooblox-group">
            <div class="tooblox-group-item">
                <button>
                    <a href="workspaces">
                        <img src="public/img/logoNoText.svg"/>
                    </a>
                </button>
            </div>
        </div>
        <div class="tooblox-group">
            <div class="tooblox-group-item tgi-small">
                <button id="erase-btn">
                    <img src="public/img/draw/erase.svg"/>
                </button>
            </div>
            <div class="tooblox-group-item tgi-small active">
                <button id="draw-btn">
                    <img src="public/img/draw/pencil.svg"/>
                </button>
            </div>
            <div class="tooblox-group-item tgi-small" style="display: none">
                <button id="upload-btn">
                    <img src="public/img/draw/upload.svg"/>
                </button>
            </div>
            <div class="tooblox-group-item tgi-small">
                <button id="save-btn">
                    <img src="public/img/draw/checkmark.svg"/>
                </button>
            </div>
        </div>
        <div class="tooblox-group unknown-width">
            <div class="tooblox-group-item tgi-medium">
                <button>
                    <input type="color" class="color-picker" id="color-picker-btn"/>
                </button>
            </div>
        </div>
    </div>
    <div class="draw-section">
        <?php if (isset($deviceWorkspace)): ?>
            <div
                class="draw-canvas"
                id="draw-canvas"
                workspace-id="<?= $deviceWorkspace->getWorkspace()->getId(); ?>"
                matrixW="<?= $deviceWorkspace->getDevice()->getWidth(); ?>"
                matrixH="<?= $deviceWorkspace->getDevice()->getHeight(); ?>"
            ></div>
        <?php endif; ?>
    </div>
</div>
</body>

<footer>
    <script
        src="https://kit.fontawesome.com/c1c8d29a2a.js"
        crossorigin="anonymous"
    ></script>
    <script src="public/js/draw/canvasPlayground.js"></script>
    <script src="public/js/draw/drawing.js"></script>
    <script src="public/js/draw/cpImportExport.js"></script>
    <script src="public/js/draw/drawingEvents.js"></script>
</footer>
</html>
