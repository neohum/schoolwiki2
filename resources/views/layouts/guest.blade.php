<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.svg">
        <link href="../css/light/loader.css" rel="stylesheet" type="text/css" />
        <link href="../css/dark/loader.css" rel="stylesheet" type="text/css" />
        <script src="../css/loader.js"></script>
        <!-- BEGIN GLOBAL MNDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/light/plugins.css" rel="stylesheet" type="text/css" />
        <link href="../css/dark/plugins.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STY LES -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../plugins/animate/animate.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->

        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link href="../src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
        <link href="../src/assets/css/light/components/carousel.css" rel="stylesheet" type="text/css">
        <link href="../src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css" />
        <link href="../src/assets/css/light/components/tabs.css" rel="stylesheet" type="text/css">


        <link href="../src/assets/css/dark/components/carousel.css" rel="stylesheet" type="text/css">
        <link href="../src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css" />
        <link href="../src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css">


        <link rel="stylesheet" href="../plugins/filepond/filepond.min.css">
        <link rel="stylesheet" href="../plugins/filepond/FilePondPluginImagePreview.min.css">


        <!--  END CUSTOM STYLE FILE  -->

        <link href="../layouts/horizontal-light-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
        <link href="../layouts/horizontal-light-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
        <script src="../layouts/horizontal-light-menu/loader.js"></script>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        <link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../layouts/horizontal-light-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
        <link href="../layouts/horizontal-light-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STY LES -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../src/plugins/src/animate/animate.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->

        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link href="../src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
        <link href="../src/assets/css/light/components/carousel.css" rel="stylesheet" type="text/css">
        <link href="../src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css" />
        <link href="../src/assets/css/light/components/tabs.css" rel="stylesheet" type="text/css">

        <link href="../src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
        <link href="../src/assets/css/dark/components/carousel.css" rel="stylesheet" type="text/css">
        <link href="../src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css" />
        <link href="../src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="../src/plugins/src/filepond/filepond.min.css">
        <link rel="stylesheet" href="../src/plugins/src/filepond/FilePondPluginImagePreview.min.css">
        <link href="../src/plugins/css/light/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
        <link href="../src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
        <!--  END CUSTOM STYLE FILE  -->

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <!-- BEGIN LOADER -->
            <div id="load_screen">
                <div class="loader">
                    <div class="loader-content">
                        <div class="spinner-grow align-self-center"></div>
                    </div>
                </div>
            </div>
            <!--  END LOADER -->
        <div class="font-sans antialiased text-gray-900">
            {{ $slot }}
        </div>

        @livewireScripts
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <scrtip src="../js/bootstrap.js"></script>
    <script src="../plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../plugins/mousetrap/mousetrap.min.js"></script>
    <script src="../plugins/waves/waves.min.js"></script>
    <script src="../css/app.js"></script>
    <script src="../css/loader.js"></script>

    <script src="../plugins/highlight/highlight.pack.js"></script>
    <!-- END GLOBAL MANATORY STYLES -->

    <!--  BEGIN CUSTOM SCRIPT FILE  -->
    <script src="../src/assets/js/scrollspyNav.js"></script>

    <script src="../plugins/filepond/filepond.min.js"></script>
    <script src="../plugins/filepond/FilePondPluginFileValidateType.min.js"></script>
    <script src="../plugins/filepond/FilePondPluginImageExifOrientation.min.js"></script>
    <script src="../plugins/filepond/FilePondPluginImagePreview.min.js"></script>
    <script src="../plugins/filepond/FilePondPluginImageCrop.min.js"></script>
    <script src="../plugins/filepond/FilePondPluginImageResize.min.js"></script>
    <script src="../plugins/filepond/FilePondPluginImageTransform.min.js"></script>
    <script src="../plugins/filepond/filepondPluginFileValidateSize.min.js"></script>

    <script>
        function addVideoInModal(btnSelector, videoSource, modalSelector, iframeHeight, iframeWidth, iframeContainer) {
                var myModal = new bootstrap.Modal(document.getElementById(modalSelector), {
                    keyboard: false
                })
                document.querySelector(btnSelector).addEventListener('click', function() {
                    var src = videoSource;
                    myModal.show('show');
                    var ifrm = document.createElement("iframe");
                    ifrm.setAttribute("src", src);
                    ifrm.setAttribute('width', iframeWidth);
                    ifrm.setAttribute('height', iframeHeight);
                    ifrm.style.border = "0";
                    ifrm.setAttribute("allow", "encrypted-media");
                    document.querySelector(iframeContainer).appendChild(ifrm);
                })
            }

            addVideoInModal('#yt-video-link', 'https://www.youtube.com/embed/YE7VzlLtp-4', 'videoMedia1', '315', '560', '.yt-container')

            addVideoInModal('#vimeo-video-link', 'https://player.vimeo.com/video/1084537', 'videoMedia2', '315', '560', '.vimeo-container')




            /**
             * ==================
             * Single File Upload
             * ==================
            */

            // We register the plugins required to do
            // image previews, cropping, resizing, etc.
            FilePond.registerPlugin(
            FilePondPluginFileValidateType,
            FilePondPluginImageExifOrientation,
            FilePondPluginImagePreview,
            FilePondPluginImageCrop,
            FilePondPluginImageResize,
            FilePondPluginImageTransform,
            //   FilePondPluginImageEdit
            );

            // Select the file input and use
            // create() to turn it into a pond
            var modalImage = FilePond.create(
            document.querySelector('.filepond'),
            {
                // labelIdle: `<span class="no-image-placeholder"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span> <p class="drag-para">Drag & Drop your picture or <span class="filepond--label-action" tabindex="0">Browse</span></p>`,
                imagePreviewHeight: 170,
                imageCropAspectRatio: '1:1',
                imageResizeTargetWidth: 200,
                imageResizeTargetHeight: 200,
                stylePanelLayout: 'compact circle',
                styleLoadIndicatorPosition: 'center bottom',
                styleProgressIndicatorPosition: 'right bottom',
                styleButtonRemoveItemPosition: 'left bottom',
                styleButtonProcessItemPosition: 'right bottom',
            }
            );

            const myModalEl = document.getElementById('profileModal')
            myModalEl.addEventListener('shown.bs.modal', event => {
                modalImage.addFiles('../assets/img/drag-1.jpeg');
            })

    </script>
    <!--  END CUSTOM SCRIPT FILE  -->
    </body>

    </html>
