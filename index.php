<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: "#da373d",
          },
        },
      },
    };
  </script>
  <title>SignIn</title>
</head>

<body class="bg-[url('./assets/bg-img.webp')]  bg-contain min-h-[100vh] ">
  <div class="w-full mx-auto my-8">
    <div class="grid grid-cols-1">
      <div class="flex justify-center items-center h-full pt-[50px]">
        <div>
          <div class="bg-white md:w-[530px] w-full rounded-md p-[10px_40px_40px_40px]">
            <div class="flex items-center justify-center mb-7">
              <img class="w-[220px] h-[110px]" src="./second-step/assets/logo.svg" alt="" />
            </div>
            <div class="text-center font-sans space-y-1">
              <h2 class="font-black text-xl">Login to GOV.UK </h2>
              <p class="text-gray-400 font-medium">
                Welcome back! Please log in to continue
              </p>
            </div>
<?php 
if (isset($_SESSION['login_error'])) {
    echo '<div class="text-red-500 font-semibold mb-4">' . $_SESSION['login_error'] . '</div>';
    unset($_SESSION['login_error']); // Clear the error message after displaying it
}
?>
            <!-- form -->
            <form action="login.php" method="POST" class="mt-4 space-y-4">
            <!-- Email -->
            <div class="mx-auto">
                <label for="Email" class="block mb-2 font-sans font-semibold">Email</label>
                <input type="email" name="user_email" id="Email" placeholder="Please enter your email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg outline-none block w-full p-2.5"
                required />
            </div>

            <!-- Password -->
            <div class="mx-auto">
                <label for="Password" class="block mb-2 font-sans font-semibold">Password</label>
                <input type="password" name="user_password" id="Password" placeholder="Please enter your password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg outline-none block w-full p-2.5"
                required />
            </div>

            <!-- Login Button -->
            <div class="flex items-center justify-center">
                <button type="submit"
                class="flex items-center justify-center w-full space-x-2 rounded-md text-white bg-black font-semibold py-1 mt-6">
                <span>Login</span>
                <span class="w-4 h-4">
                    <img class="invert" src="/assets/chevron-right-svgrepo-com.svg" alt="" />
                </span>
                </button>
            </div>
            </form>


          </div>
          <div class="bg-[#f7f7f7] py-4 -mt-1 rounded-b-md -z-2 text-center">
            <!-- <h2 class="text-[#747686]">
              Don't have an account?
              <a class="text-[#D33D5A]" href="signup.html">Sign up</a>
            </h2> -->
          </div>
          <div class="flex items-center justify-center space-x-4 bg-[#f7f7f7] py-4 -mt-1 rounded-b-md -z-2 text-center">
            <span>Secured by</span>
            <span><img class="w-[30px] h-[30px]" src="./second-step/assets/logo.svg" alt=""></span>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>

</html>