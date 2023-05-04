<template>
    <div class="container">
      <div class="card">
        <h2>Login</h2>
        <form>
          <label for="email">Email</label>
          <input type="email" v-model="email" id="email" required>
  
          <label for="password">Password</label>
          <input type="password" v-model="password" id="password" required>
  
          <button @click.prevent="login()">Login</button>
  
          <div v-if="errorMessage" class="error-message">{{ errorMessage }}</div>
        </form>
      </div>
    </div>
  </template>
  
  <script>
  import { projectAuth } from '../firebase/config';
  import { ref } from 'vue';
  
  export default {
    name: 'Login',
    setup() {
      const email = ref('');
      const password = ref('');
      const errorMessage = ref(null);
  
      const login = async () => {
        errorMessage.value = null;
  
        try {
          const res = await projectAuth.signInWithEmailAndPassword(email.value, password.value);
          console.log(res);
          // redirect to home page after successful login
          router.push('/');
        } catch (err) {
          console.log(err.message);
          errorMessage.value = err.message;
        }
      };
  
      return { email, password, errorMessage, login };
    }
  }
  </script>
  
  <style>
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .card {
    width: 300px;
    padding: 30px;
    border: 1px solid #ccc;
    border-radius: 10px;
    text-align: center;
  }
  
  input {
    display: block;
    margin: 20px 0;
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
  }
  
  button {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border-radius: 5px;
    border: none;
    cursor: pointer;
  }
  
  button:hover {
    opacity: 0.8;
  }
  
  .error-message {
    color: red;
    margin-top: 10px;
  }
  </style>
  