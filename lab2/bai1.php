<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    $list = [
        [
            "image" => "https://media.worldnomads.com/explore/vietnam/halong-bay-vietnam-from-above-gettyimages.jpg",
            "title" => "Hình ảnh 1"
        ],
        [
            "image" => "https://www.visithalongbay.com/media/cache/1a/f5/1af56f83eb2ba43b31351ae2e0cb1b7b.jpg",
            "title" => "Hình ảnh 2"
        ],
        [
            "image" => "https://bcp.cdnchinhphu.vn/Uploaded_VGP/phamvanthua/20190725/0052583f41011fc2c2f516e5b4b693ec%20(1).jpg",
            "title" => "Hình ảnh 3"
        ],
        [
            "image" => "https://vcdn-english.vnecdn.net/2019/07/24/10dayVietnam4-1563961581-4041-1563961635_1200x0.jpg",
            "title" => "Hình ảnh 4"
        ]
    ]
    ?>
    <div class="container">
        <div class="row">
            <?php
            foreach ($list as $item) {
                ?>
              <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $item['image']; ?>" style="height:200px" class="card-img-top" 
                        alt="<?php echo $item['title']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item['title']; ?></h5>
                            <a href="javascript:void(0)" 
                            onclick="openModal('<?php echo $item['image']; ?>',
                            '<?php echo $item['title']; ?>')" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $list[0]['title']; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="overflow:hidden">
                    <img class="modal-img" src="<?php echo $list[0]['image']; ?>" style="width:100%"/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const myModal = new bootstrap.Modal(document.getElementById('myModal'), {
            keyboard: true
        })

        function openModal(imagePath,title){
            document.querySelector('#myModal .modal-img').setAttribute('src',imagePath);
            document.querySelector('#myModal .modal-title').innerText=title;
            myModal.show();
        }
    </script>
</body>



</html>