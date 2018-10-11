import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import GoogleLogin from 'react-google-login';
class App extends Component {
  render() {

    const responseGoogle = () =>{
      console.log("hola")
    }

    return (
      <div className="App"> 
        <div className = "row">
          <div classNme = "col-md-2">

          </div>
          <div classNme = "col-md-4">
            <form>
              <GoogleLogin
                clientId = "720063066759-p70dno7tr8kkr8qno22itf1p2l6mt2eb.apps.googleusercontent.com"
                buttonText = "Iniciar con Google"
                onSuccess = {responseGoogle} 
                onFailure = {responseGoogle}
              />
            </form>
          </div>

          <div classNme = "col-md-2"></div>
          <div classNme = "col-md-4">
              <p> Si no tienes cuenta, ¡Registrate aquí! </p>
              <div><label>Nombre <input type = "text" name = "first_name"
                className = "form-control" onChange = {this.getValue} /></label>
              </div>
              <div><label>Apellido <input type = "text" name = "last_name"
                className = "form-control" onChange = {this.getValue} /></label>
              </div>
              <div><label>Correo Electrónico <input type = "email" name = "email"
                className = "form-control" onChange = {this.getValue} /></label>
              </div>
              <div><label>Nombre Usuario <input type = "text" name = "userName"
                className = "form-control" onChange = {this.getValue} /></label>
              </div>
              <div><label>Contraseña <input type = "password" name = "password"
                className = "form-control" onChange = {this.getValue} /></label>
              </div>
          </div>
        </div>


      </div> );

  {/*
        <header className="App-header">
        <h1> ZELDA FULL HD 4K ORIGINAL </h1>
          <img src={logo} className="App-logo" alt ="logo" />
          <p>
            Edit <code>src/App.js</code> and save to reload.
          </p>
          <a
            className="App-link"
            href="https://reactjs.org"
            target="_blank"
            rel="noopener noreferrer"
          >
            Learn React
          </a>
        </header>
        */}
  }
}

export default App;
