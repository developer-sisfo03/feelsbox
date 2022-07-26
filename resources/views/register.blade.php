<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="css/register/style.css">
</head>
<body>
<div class="parent">
      <div class="container">
        <div class="right">
          <h1>Register</h1>
          <p>Please fill your information below!</p>
          <form class="text-center login" action="/register" method="post">
            @csrf
            <div class="input-icons">
              <input
                class="no-outline"
                type="text"
                name="name"
                placeholder="Name"
                require
              />
            </div>
            <br>
            <div class="input-icons">
              <input
                class="no-outline"
                type="text"
                name="email"
                placeholder="Email"
                require
              />
            </div>
            <br />

            <div class="input-icons">
              <input
                type="password"
                class="no-outline"
                name="password"
                placeholder=" Password"
                require
              />
            </div>
        </div>
        
        <div class="left">
            <div class="side">
                <div class="select">
                    <select name="jenis_kelamin">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="right input-icons">
                    <input
                        class="no-outline"
                        type="date"
                        name="tanggal_lahir"
                        placeholder="Name"
                        require
                    />
                </div>
            </div>
            <div class="right input-icons">
              <input
                class="no-outline"
                type="text"
                name="domisili"
                placeholder="Alamat"
                require
              />
            </div>
            <div class="input-incons">
              <select name="role" id="">
                <option value="">Select Role</option>
                <option value="psikolog">Psikolog</option>
                <option value="user">User</option>
              </select>
            </div>
            <div class="desktop">
                <button class="submit" name="submit" type="submit">
                    <h3>Register</h3>
                </button>
                <div class="ask">
                    <div class="rememmber">
                        <label>
                            <input type="checkbox" name="" id="">
                            <span class="checkbox"></span>
                        </label>
                        <h5>I accept terms and conditions</h5>
                    </div>
                    <h5>
                    Already have an account?<span class="sign"
                        ><a href="/"> Login </a></span
                    >
                    </h5>
                </div>
          </div>
        </div>
      </div>
      <div class="bottom">
        <button class="submit" name="submit" type="submit">
          <h3>Register</h3>
        </button>
        <h5>
          Don't have an account?<span class="sign"
            ><a href="/">Sign Up</a></span
          >
        </h5>
      </div>
      </form>
    </div>
</body>
</html>