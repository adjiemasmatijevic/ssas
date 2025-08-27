<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php $this->load->view('admin/partial/head')  ?>

<body>
    <div class="container-scroller">
        <!-- navbar -->
        <?php $this->load->view('admin/partial/navbar')  ?>

        <div class="container-fluid page-body-wrapper">
            <!-- setting-panel -->
            <?php $this->load->view('admin/partial/setting-panel')  ?>
            <!-- menu sidebar -->
            <?php $this->load->view('admin/partial/sidebar')  ?>

            <div class="main-panel">
                <div class="content-wrapper">

                </div>
                <!-- content-wrapper ends -->

                <!-- footer -->
                <?php $this->load->view('admin/partial/footer') ?>

            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

</body>

</html>