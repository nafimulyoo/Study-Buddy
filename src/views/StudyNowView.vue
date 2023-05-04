<template>
    <div class="study-now">
      <LeftNavigationBar />
      <FriendActivityBar />

      <button class="settings-button" @click="openSettings">
      <i class="fas fa-cog"></i>
      </button>
  
      <div class="content">
      <h2>Focus Period ({{ currentSession }} of {{ totalSessions }})</h2>
      <div class="pomodoro-timer">
        <CircleProgress
          class="progress-circle"
          :progress="progress"
          :size="200"
          :thickness="5"
          :line-cap="round"
          :progress-color="'#3f51b5'"
          :empty-fill="'rgba(0, 0, 0, 0.1)'"
        />
        <div class="timer">{{ timeLeftFormatted }}</div>
      </div>

  
        <div class="controls">
          <button class="circular-button">
            <i class="fas fa-tasks"></i> <!-- Focus Mode icon -->
          </button>
          <button class="circular-button">
            <i class="fas fa-list"></i> <!-- To Do List icon -->
          </button>
  
          <button @click="toggleStartPause">{{ startPauseText }}</button>
  
          <button class="circular-button">
            <i class="fas fa-stop"></i> <!-- Stop Timer icon -->
          </button>
          <button class="circular-button">
            <i class="fas fa-expand"></i> <!-- Full Screen icon -->
          </button>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import LeftNavigationBar from '@/components/general/FriendActivityBar.vue';
  import FriendActivityBar from '@/components/general/FriendActivityBar.vue';
  import CircleProgress from 'vue-circle-progress';
  
  export default {
    components: {
      LeftNavigationBar,
      FriendActivityBar,
      CircleProgress,
    },
    data() {
      return {
        currentSession: 1,
        totalSessions: 4,
        timeLeft: 1260, // 21 minutes in seconds
        timerRunning: false,
      };
    },
    computed: {
      timeLeftFormatted() {
        const minutes = Math.floor(this.timeLeft / 60);
        const seconds = this.timeLeft % 60;
        return `${minutes}m ${seconds}s`;
      },
      startPauseText() {
        return this.timerRunning ? 'Pause' : 'Start';
      },
      progress() {
      return (this.timeLeft / (25 * 60)) * 100;
    },
    },
    methods: {
      toggleStartPause() {
        // Add your timer start/pause implementation
      },

      openSettings() {
      // Add your settings opening implementation
    },
    },
  };
  </script>
  
  <style scoped>
  .study-now {
    display: flex;
    min-height: 100vh;
  }

  .progress-circle {
  position: relative;
  margin-bottom: 1rem;
}
  
  .content {
    flex-grow: 1;
    padding: 2rem;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .settings-button {
  position: fixed;
  top: 1rem;
  right: 1rem;
  background-color: #3f51b5;
  border: none;
  color: white;
  font-size: 1.5rem;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
}
  
  .pomodoro-timer {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 1rem;
  }
  
  .timer {
    font-size: 2rem;
    margin-bottom: 1rem;
  }
  
  .controls {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
  }
  
  .circular-button {
    border-radius: 50%;
    padding: 0.5rem;
    border: none;
    cursor: pointer;
  }
  
  button {
    margin: 0 1rem;
  }
  </style>
  