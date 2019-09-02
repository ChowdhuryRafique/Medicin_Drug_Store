   <!-- Start search and upload part -->
   <div class="full-search">
        <div class="search-area">
            <div class="container">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Ex:Paracetamol 650 mg">
                    <div class="input-group-append">
                        <button class="search" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <form id="dropFileForm" action="http://localhost/upload.php" method="post" onsubmit="uploadFiles(event)">
                <input type="file" name="files[]" id="fileInput" multiple onchange="addFiles(event)">

                <label for="fileInput" id="fileLabel" ondragover="overrideDefault(event);fileHover();" ondragenter="overrideDefault(event);fileHover();" ondragleave="overrideDefault(event);fileHoverEnd();" ondrop="overrideDefault(event);fileHoverEnd();
                  addFiles(event);">
                    <i class="fa fa-download fa-5x"></i>
                    <br>
                    <span id="fileLabelText">
                        Click Here To Upload Your Prescription
                    </span>
                    <br>
                    <span id="uploadStatus"> </span>
                </label>
            </form>
        </div>
    </div>