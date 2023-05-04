<template>
    <div>
      <label>What to study?</label>
      <input v-model="subject" type="text">
      <label>Duration (minutes)</label>
      <div class="duration-controls">
        <button @click="decrementDuration">-</button>
        <span>{{ duration }}</span>
        <button @click="incrementDuration">+</button>
      </div>
      <button @click="startStudy">Start Study</button>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        subject: '',
        duration: 30 // default duration is 30 minutes
      }
    },
    methods: {
      incrementDuration() {
        this.duration += 5 // increase duration by 5 minutes
      },
      decrementDuration() {
        if (this.duration > 5) {
          this.duration -= 5 // decrease duration by 5 minutes, with a minimum of 5 minutes
        }
      },
      startStudy() {
        // Redirect user to study page with current settings
        this.$router.push({
          name: 'study',
          params: {
            subject: this.subject,
            duration: this.duration
          }
        })
      }
    }
  }
  </script>
  
  <style>
  .duration-controls {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 10px 0;
  }
  .duration-controls button {
    margin: 0 10px;
  }
  </style>
  