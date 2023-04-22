<?php if($role == 'default'): ?>
    <p id="error" style='display:none; background: orange; font-size: 12px;' ><?php echo $role; ?></p>
<?php else: ?>
    <p id="error" style='display:none; background: orange; font-size: 12px;' ><?php echo $role; ?></p>
<?php endif ?>

<script>
    var error = document.getElementById('error');
    if (error.textContent == "" ) {
      //  alert('fuck')
        swal("Oops!", "Hello, Kindly Deposit a Minimum of $50 worth of BTC to activate your account", "warning");  
        setTimeout(() => {
            window.location.href = 'deposit'
        }, 30000);     
        
    }

    </script>