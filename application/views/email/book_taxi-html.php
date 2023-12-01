<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style type="text/css">
        /*body {font-family: 'Inter', sans-serif; font-family: 'Poppins', sans-serif;}*/
        *,
        body {
            margin: 0px;
            padding: 0px;
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
        }

        ul,
        li {
            list-style: none;
            margin: 0px;
            padding: 0px;
        }
    </style>
</head>

<body>
    <center>
        <table style="width: 100%; max-width: 600px; padding: 0; text-align: center; background: #fff; border: 1px solid #ccc ;border-top: 10px solid #f5b21d; border-collapse: collapse;" cellspacing="0" cellpadding="0">
            <tbody>
          
                <!-- <tr>
                    <td colspan="2" style="padding: 40px 15px; margin: 0px; text-align: center;">
                        <img src="<?php echo BASE_URL ?>assets/img/logo-dark.png" style="display: block;width: 50px;margin: 0 auto;height: 100px;">
                    </td>
                </tr> -->
                <tr>
                    <td colspan="2" style="margin: 0px; text-align: center; box-sizing: border-box;padding: 20px;background-color: #f5b21d;">
                        <p style="margin: 0;padding: 0;font-family: 'Poppins', sans-serif;font-weight: 400;font-size: 18px;color: #fff;"><img src="<?php echo BASE_URL ?>assets/img/logo-dark.png" style="display: block;width: 150px;margin: 0 auto;height: 100px;">You have recevied inquiry for taxi booking <?php echo (isset($post_data) && $post_data['Type'] != '') ? $post_data['Type'] : '' ?></p>
                    </td>
                </tr>



                <tr>
                    <td colspan="2" style="padding: 15px; margin: 0px; border-top: 1px solid #ccc; border-bottom: 1px solid #ccc;">
                        <table style="width: 100%; padding: 0; text-align: center; border: none; border-collapse: collapse;" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                  
                                    <td style="padding: 0px 15px;vertical-align: top;border: none;">
                                        <table style="width: 100%; padding: 0; text-align: left; border: none; border-collapse: collapse;" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                    <th style="font-weight: 700;color: #000;font-size: 15px;padding-bottom: 5px;">Name</th>
                                                    <td style="font-weight: 400;color: #000;font-size: 15px;padding-bottom: 5px;"><?php echo $post_data['Name'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th style="font-weight: 700;color: #000;font-size: 15px;padding-bottom: 5px;">Mobile</th>
                                                    <td style="font-weight: 400;color: #000;font-size: 15px;padding-bottom: 5px;"><?php echo $post_data['Mobile'] ?> </td>
                                                </tr>
                                                <tr>
                                                    <th style="font-weight: 700;color: #000;font-size: 15px;padding-bottom: 5px;">Email</th>
                                                    <td style="font-weight: 400;color: #000;font-size: 15px;padding-bottom: 5px;"><?php echo $post_data['Email'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th style="font-weight: 700;color: #000;font-size: 15px;padding-bottom: 5px;">Type</th>
                                                    <td style="font-weight: 400;color: #000;font-size: 15px;padding-bottom: 5px;"><?php echo $post_data['Type'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th style="font-weight: 700;color: #000;font-size: 15px;padding-bottom: 5px;">Persons</th>
                                                    <td style="font-weight: 400;color: #000;font-size: 15px;padding-bottom: 5px;"><?php echo $post_data['Persons'] ?></td>
                                                </tr>

                                                <tr>
                                                    <th style="font-weight: 700;color: #000;font-size: 15px;padding-bottom: 5px;">Start Destination</th>
                                                    <td style="font-weight: 400;color: #000;font-size: 15px;padding-bottom: 5px;"><?php echo $post_data['StartDestination'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th style="font-weight: 700;color: #000;font-size: 15px;padding-bottom: 5px;">End Destinaion</th>
                                                    <td style="font-weight: 400;color: #000;font-size: 15px;padding-bottom: 5px;"><?php echo $post_data['EndDestinaion'] ?></td>
                                                </tr>
                                                <tr>
                                                    <th style="font-weight: 700;color: #000;font-size: 15px;padding-bottom: 5px;">Date & Time</th>
                                                    <td style="font-weight: 400;color: #000;font-size: 15px;padding-bottom: 5px;"><?php echo date("Y-m-d", strtotime($post_data['Date'])) ?> <?php echo date("h:i A", strtotime($post_data['Time'])) ?></td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%; min-width: 150px; text-align: center; padding: 15px;">
                        <img src="<?php echo BASE_URL ?>assets/img/logo-dark.png" style="width: 100%; min-width: 150px; max-width: 165px;display: block;margin: 0 auto;">
                    </td>
                    <td style="width: 50%;padding: 15px;">
                        <div class="address">
                            <p style="font-size: 16px;color: #000;font-family: 'Poppins', sans-serif;font-weight: 400;margin: 0;padding: 0;"><?php echo WEBSITE_NAME; ?> <br>
                               
                                <a href="tel:<?php echo WEBSITE_NUMBER; ?>" style="font-size: 15px;color: #2d2d2d;font-family: 'Poppins', sans-serif;font-weight: 400;text-decoration: none;outline: none;word-break: break-all;display: inline-block;line-height: 15px;padding: 3px 0;"><?php echo WEBSITE_NUMBER; ?>.</a> <br>
                                <a href="mailto:<?php echo WEBSITE_EMAIL; ?>" style="font-size: 15px;color: #2d2d2d;font-family: 'Poppins', sans-serif;font-weight: 400;text-decoration: none;outline: none;word-break: break-all;display: inline-block;line-height: 15px;padding: 3px 0;"><?php echo WEBSITE_EMAIL; ?></a><br>
                                <a href="<?php echo base_url(); ?>" style="font-size: 15px;color: #2d2d2d;font-family: 'Poppins', sans-serif;font-weight: 400;text-decoration: none;outline: none;">www.aplimo.co</a>
                            </p>
                            <p style="font-size: 15px;color: #000;font-family: 'Poppins', sans-serif;font-weight: 400;text-decoration: none;outline: none;margin: 15px 0;"><?php echo WEBSITE_ADDRESS ?>.</p>


                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </center>
</body>

</html>