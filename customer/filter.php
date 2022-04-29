<?php
//importing connection file
require_once '../connection.php';

if (isset($_POST['action'])) {
    //sql query
    $sql = "SELECT product.product_id,product.image,product.product_name,product.volume,
            product.price,product.product_type, merchant.merchant_id, merchant.business_name
            FROM  merchant
            RIGHT JOIN product ON merchant.merchant_id = product.merchant_id 
            WHERE product.merchant_id = merchant.merchant_id && merchant.business_name  != '' ";

    //adding new price to query if changed
    if (isset($_POST['price'])) {
        $lowRange = $_POST['price'] - $_POST['price'] * 1 / 4;
        $highRange = $_POST['price'] + $_POST['price'] * 1 / 2;
        $sql .= " AND (price >=". $lowRange ." AND price <= ". $highRange .")";
    }


    //adding category to query if checked
    if (isset($_POST['product_type'])) {
        $product_type = implode(",", $_POST['product_type']);
        $sql .= " AND product.product_type IN (". $product_type .")";
    }
 
    //adding product name to query if checked
    if(isset($_POST['product_name'])){
        $product_name = implode(",", $_POST['product_name']);
        $sql .= " AND product.product_name IN(". $product_name .")";
    }

    //adding volume to query if checked
    if(isset($_POST['volume'])){
        $volume = implode(",", $_POST['volume']);
        $sql .= " AND product.volume IN(". $volume .")";
    }

  
    $sql .= " GROUP BY product_id ";

    $result = $conn->query($sql);
    $rows = 0;
    if($result){
        $rows = $result -> num_rows;
    }

    //output variable contains filtered broduct content 
    $output = "";
    if ($rows > 0) {
        while ($data = $result->fetch_assoc()) {
                $std_num= 0;
                $counter =0;
                $productId = $data['product_id'];
                $query2 = $conn->query("SELECT product_rating.rating
                FROM product_rating WHERE product_rating.product_id = $productId");

                while($fetch2 = $query2->fetch_array()){
                  $std_num += $fetch2['rating'];
                  $counter++;
                }
                if($std_num > 0) {
                  $average = $std_num / $counter;
                }
                else {
                  $average = 0;

                }


            $output .= "   
                        <div class='col-md-12 col-lg-4 mb-4 mb-lg-0 ' >
                            <div class='card'> 
                              <div class='d-flex justify-content-between p-3'>
                                <p class='lead mb-0'> ". $data['business_name']." 's Offer</p>
                                <a >
                                  <div class='mask'>
                                    <div class='d-flex justify-content-start align-items-end h-100'>
                                      <h2><span class='badge bg-warning ms-2'>Sale</span></h2>
                                    </div>
                                  </div>
                                  <div class='hover-overlay'>
                                    <div
                                      class='mask'
                                      style='background-color: rgba(251, 251, 251, 0.15);' 
                                    ></div>
                                  </div>
                                </a>
                              </div>
                               <img src = '../photo/".$data['image']."' 
                                  onclick='window.location=\" product_view.php?product_id=".$data['product_id']." \"'
                                   class='card-img-top' />
                                <div class='card-body'>
                                    <div class='d-flex justify-content-between'>
                                      <p class='small'>". $data['product_type']." ". $data['volume']." </p>
                                    </div>
                                    <div class='d-flex justify-content-between mb-3'>
                                      <h5 class='mb-0'>". $data['product_name']." </h5>
                                      <h5 class='text-dark mb-0'>&#8369; ".$data['price'].".00</h5>
                                    </div>
                                    <svg style='display:none;'>
                                      <defs>
                                        <symbol id='fivestars'>
                                          <path d='M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24' fill='white' fill-rule=' evenodd'/>
                                          <path d='M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24' fill='white' fill-rule='
                                          evenodd' transform='translate(24)'/>
                                          <path d='M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24' fill='white' fill-rule='
                                          evenodd' transform='translate(48)'/>
                                          <path d='M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24' fill='white' fill-rule='evenodd' transform='translate(72)'/>
                                          <path d='M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z M0 0 h24 v24 h-24 v-24' fill=
                                          'white' fill-rule='evenodd'  transform='translate(96)'/>
                                        </symbol>
                                      </defs>
                                    </svg>
                                    <div class='rating'>
                                    <!--   <div class='rating-bg' style='width: 90%;'></div> -->
                                      <progress class='rating-bg' value='" . $average. "'  max='5'></progress>
                                      <svg><use xlink:href='#fivestars'/></svg>
                                    </div>
                                       <a onclick='window.location='review.php?product_id=". $data['product_id']." ''   
                                          style='width: 65%; margin-top: 50px'
                                          class='btn btn-primary'>Ratings and Reviews</a>
                              </div>
                            </div>
                          </div>
                          </div>
                           ";



           
        }
    }else{
        $output = '<div style="color:red;font-size:17px;">No results found</div>';
    }
    
    //echo back filterd product to page
    echo $output;
}
