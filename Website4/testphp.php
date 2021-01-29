<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="modal-body">
                <h2><?php echo $row['item_name'] ?></h2>
                <hr class="star-primary">
                <img src="<?php echo $row['image'] ?>" class="img-responsive img-centered" alt="" style="width:20%;">
                <p><?php echo $row['blurb'] ?></p>
                <ul class="list-inline item-details">
                    <li>Client:
                        <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                        </strong>
                    </li>
                    <li>Date:
                        <strong><a href="http://startbootstrap.com">April 2014</a>
                        </strong>
                    </li>
                    <li>Service:
                        <strong><a href="http://startbootstrap.com">Web Development</a>
                        </strong>
                    </li>
                </ul>
                <table>
                    <tr>
                        <td>
                            <?php
                            echo '<a href="includes/added.php?id='.$row['item_id'].'"><button type="button" class="btn btn-default" data-dismiss="modal">Add To Cart</button></a>';
                            ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>