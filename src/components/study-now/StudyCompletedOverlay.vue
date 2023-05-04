<template>
    <div class="overlay">
      <div class="overlay-background"></div>
      <div class="overlay-content">
        <h2>You Completed Your Study Session</h2>
        <div class="completion-window">
          <button class="close-button" @click="closeOverlay">
            <i class="fas fa-times"></i>
          </button>
          <!-- Other content -->
          <h3>Study Duration</h3>
          <div class="duration">{{ studyDuration }}</div>
          <!-- Focus/Not Focus bar -->
          <!-- ... -->
          <div class="xp-gained">XP Gained: {{ xpGained }}</div>
          <div class="focus-percentage">Focus Percentage: {{ focusPercentage }}%</div>
          <!-- ... -->
          <div class="share-options">
            <label>
              <input type="checkbox" v-model="shareFocusBar" />
              Share focus bar
            </label>
            <label>
              <input type="checkbox" v-model="hideFromTimeline" />
              Hide from timeline
            </label>
          </div>
          <div class="share-study">
            <input type="text" placeholder="Share your study" />
            <button class="attach-file-button">
              <i class="fas fa-paperclip"></i>
            </button>
            <button class="share-button">
              <i class="fas fa-share"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        studyDuration: '2 hours',
        xpGained: 100,
        focusPercentage: 85,
        shareFocusBar: false,
        hideFromTimeline: false,
      };
    },
    methods: {
      closeOverlay() {
        // Close the overlay
      },
    },
  };
  </script>
  
  <style scoped>
  .overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .overlay-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);
  }
  
  .overlay-content {
    position: relative;
    z-index: 1;
  }
  
  .completion-window {
    background-color: #fff;
    border-radius: 5px;
    padding: 2rem;
    position: relative;
    width: 600px;
    max-width: 100%;
  }
  
  .close-button {
    position: absolute;
    top: 10px;
    right: 10px;
    border: none;
    background-color: transparent;
    font-size: 1.2rem;
    cursor: pointer;
  }
  
  /* Other styles */
  </style>
  