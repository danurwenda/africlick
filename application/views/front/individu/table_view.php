
<div class="row">
    <div class="col-xs-12">
        <h3 class="header smaller lighter blue">Your Match</h3>
        <h4>

        </h4>
        <!--<div class="clear"></div>-->

        <!-- <div class="table-responsive"> -->

        <!-- <div class="dataTables_borderWrap"> -->
        <div>
            <?php
            if (!empty($matches)) {
                echo '<div class="center">';
                foreach ($matches as $profile) {
                    ?>

                    <div id="card_<?php echo $profile->user_id; ?>" class="cardWrap">
                        <div class="profileCard">
                            <div class="center">
                                <a href="<?php echo site_url('individu/detail/' . $profile->user_id); ?>">
                                    <div class="avatar">
                                        <?php echo image_asset('avatars/' . $profile->pic, 'africlick'); ?>                                        
                                    </div>
                                </a>
                                <br/>
                                <a href="<?php echo site_url('individu/detail/' . $profile->user_id); ?>"><b><?= $profile->name ?></b></a> (<?= $profile->age ?>, <?= strtoupper($profile->gender) ?>)
                            </div>

                            <br/>

                            <b>Profession:</b> <?php echo $profile->profession; ?><br/>
                            <b>Religion:</b> <?php echo $profile->religion; ?><br/>

                            <br/>
                        </div>
                    </div>

                    <?php
                }
                echo '</div>';
            } else {
                ?>

                Nobody matches you :(

                <?php
            }
            ?>
        </div>
    </div>
</div>



<!-- PAGE CONTENT ENDS -->