<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title = "Hyderabad Landing Page"; ?></title>
    <link rel="stylesheet" href="./styles/index.css">
    <script src="./javaScript/index.js" defer></script>
    <link href="https://blogfonts.com/css/aWQ9MTM5NzM1JnN1Yj03MzUmYz1zJnR0Zj1zd2lzcys3MjErYm9sZCtjb25kZW5zZWQrYnQudHRmJm49c3dpczcyMS1jbi1idC01/Swis721 Cn BT.ttf" rel="stylesheet" type="text/css" />
</head>

<body>

    <?php include('./components/array.php'); ?>
    <div class="main-app">
        <!-- Why CION CANCER CLINICS -->
        <?php include('./components/whyCionCancer.php') ?>
        <div class="why-cion-smalldevice-container">
            <h2>Why Choose Us <br />
                <span>CION Cancer Clinics</span>
            </h2>
            <span></span>
            <div class="whycion__card__maincontainer">
                <?php $smallDevicesWhyCionCardData =
                    [
                        ['assets\Why Choose Icon 1.png', 'Chain of 20+ Hospitals'],
                        ['assets\Why Choose Icon 2.png', '2500+ cancer
                        patients served'],
                        ['assets\Why Choose Icon 3.png', '15 highly qualified
                        oncologists'],
                        ['assets\Why Choose Icon 4.png', 'Treating in 10+ Districts']
                    ];
                foreach ($smallDevicesWhyCionCardData as $eachCardData) :
                ?>
                    <div class="whyCion__cardcontainer">
                        <img src="<?php echo $eachCardData[0]; ?>" alt="" />
                        <p><? echo $eachCardData[1]; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <button>About OUR CLINICS</button>
        </div>
        <!-- Patients Experience -->
        <?php include('./components/pateientExperience/patientsExperience.php') ?>
        <!-- Types of Cancer we Treat Container -->
        <?php include('./components/typesOfCancersWeDO/typesOfCancersWeDo.php') ?>
        <!-- Arogya Sri Banner container -->
        <?php include("./components/arogyaSreeBanner/arogyaSreeBanner.php") ?>
    </div>
</body>

</html>