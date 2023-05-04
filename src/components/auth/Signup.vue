<template>
    <div>
      <h1>Signup</h1>
      <form @submit.prevent="signup">
        <div>
          <label for="email">Email</label>
          <input type="email" id="email" v-model="form.email" required>
        </div>
        <div>
          <label for="password">Password</label>
          <input type="password" id="password" v-model="form.password" required>
        </div>
        <div>
          <button type="submit">Signup</button>
        </div>
      </form>
      <div v-if="errorMessage">
        {{ errorMessage }}
      </div>
    </div>
  </template>
  
  <script>
  import { ref } from 'vue'
  import { auth } from '../firebase'
  import { useRouter } from 'vue-router'
  
  export default {
    name: 'Signup',
    setup() {
      const form = ref({
        email: '',
        password: ''
      })
      const errorMessage = ref('')
      const router = useRouter()
  
      const signup = async () => {
        try {
          const { user } = await auth.createUserWithEmailAndPassword(form.value.email, form.value.password)
          console.log(user)
          router.push({ name: 'home' })
        } catch (error) {
          console.log(error)
          errorMessage.value = error.message
        }
      }
  
      return {
        form,
        signup,
        errorMessage
      }
    }
  }
  </script>
  