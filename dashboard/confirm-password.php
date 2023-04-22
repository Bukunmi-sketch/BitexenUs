<?php  include "../includes/header.php"; ?>

<style>
    .container {
        padding: 15px;
        background: var(--dark-blue);
        border-radius: 5px;
        color: var(--text-color);
    }
    article .fa {
        font-size: 12px;
        color: dodgerblue;
    }

    .container button {
        padding: 10px 50px;
        border: 1px solid transparent;
        background: dodgerblue;
        color: var(--text-color);
        margin: 10px 0;
        border-radius: 3px;
        font-weight: bold;
    }
    hr {
            border: 1px solid transparent;
            border-bottom: 1px solid var(--text );
        }

        form input, form select {
        padding: 10px; 
        border-radius: 3px;
        border: 1px solid var(--hover);
        display: block;
        width: 100%;
        background: var(--primary);
        color: var(--text-color);
        margin: 10px 0;
        font-size: 12px;
    }
    form label {
        margin: 20px 0;
        font-size: 14px;
        color: var(--text-color);
    }
    form button {
        background: dodgerblue;
        padding: 9px 15px;
        display: flex;
        align-items: center;
        color: white;
        border: 1px solid dodgerblue;
        border-radius: 3px;
        margin: 5px 0;
    }
    form sup {
        color: red;
    }
    #item-list {
        display: flex;
        font-weight: bold;
    }
    #item-list li {
        margin: 0 10px;
        padding: 3px;
        font-size: 13px;
        color: white;
        text-decoration: none;
    }
    #item-list .active-list {
        color: dodgerblue;
        border-bottom: 2px solid dodgerblue;
    }
    @media screen and (min-width: 768px) {
        .input-grid {
            display: grid; 
            grid-template-columns: 1fr 1fr;
        }
        .input-grid article {
            margin: 5px;
        }
        .input-grid:nth-child(2), .input-grid:nth-child(3) {
            display: grid; 
            grid-template-columns: 1fr 1fr 1fr;
        }
    }

    @media screen and (min-width: 1200px) {}
</style>

<style>
        @media screen and (min-width: 768px) {
            .fixed-width {
                width: 100%;
                margin: 0 0%;
            }
            
            .side-panel-right {
                display: none;
                width: 30%;
            }
        }

        @media screen and (min-width: 1200px) {
            .fixed-width {
                width: 80%;
                transform: translateX(5%);
                margin: 0 15%;
            }

            .side-panel-left {
                width: 20%;
                display: block;
            }
        }
    </style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.6/dist/sweetalert2.all.min.js"></script>
 <div class="container">
        <h3>Profile Details</h3><br>

        <ul id='item-list'>
           
            <a href="change_password" class='active-list'><li> Please enter your accounts password to continue </li></a>
           
        </ul><br>
       

        <?php 
            if (isset($_POST['submit'])) {
            
                htmlspecialchars(trim($confirm = $_POST['confirm']));

                $st_confirm = strtolower($confirm);
            

                if ($st_confirm != $password) {
                      $error = 'incorrect';
                    echo '<script>
                            swal("ERROR!", "Incorrect password", "warning"); 
                        </script>'; 
                } elseif($st_confirm == "") {
                    $error = 'empty';
                    echo '<script>
                    swal("ERROR!", "field cannot be empty", "warning"); 
                </script>'; 
                } elseif ($st_confirm == $password) {
                echo '<script>
                Swal.fire({
                    title: "SUCCESS",
                    text: "Verified successfully ",
                    icon: "success",
                    showCancelButton: false,
                    confirmButtonColor: "#3085d6",
                    confirmButtonText: "continue"
                  }).then((result) => {
                    if (result.isConfirmed) {
                      location = "send_to"
                    }
                  });
                          setTimeout(() => {
                              window.location.href = "send_to"
                          }, 30000);      

                </script>';
                }else {    
                    echo '<script>
                    swal("Oops!", "Something went wrong", "warning");               
                </script>';              
                }

            }
        ?>
        <form action="" method="post">
            <div class="input-grid">

                <article>
                    <label for="">Confirm Password<sup>*</sup></label>
                    <input type="text" name='confirm'  required>
                </article>

            </div>
        
        <button type='submit' name='submit'>Confirm</button>
        </form>
       </div>
 </div>
 <p id="error" style='display: none '><?php echo $error?></p>

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.6/dist/sweetalert2.all.min.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 

 <script>
    var error = document.getElementById('error');

    if (error.textContent == 'less') {
         swal("ERROR!", "Sorry password cannot be less than 6", "warning");
    }else if (error.textContent == "incorrect") {
        swal("ERROR!", "Incorrect password", "warning");        
    }else if (error.textContent == "success") {
        swal("SUCCESS!", "Verified successfully", "success");        
        setTimeout(() => {
            window.location.href = 'mail_verification'
        }, 3000);
    }

</script>
 <br><br><br>


<?php  include "../includes/footer.php"; ?>
