<template>
    <Head title="Study Now" />
  
    <AuthenticatedLayout>
      <h1 class="font-bold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
        Study Now
      </h1>
      <div class="flex flex-col items-center justify-center text-white">
        <h2 class="text-2xl mt-8">Study Timer</h2>
        <div class="font-bold mt-8" style="font-size: 120px;">{{ minutes }}:{{ seconds }}</div>
        <div class="button-container mb-8">
          <button @click="toggleTimer" class="bg-primary text-white px-6 py-2 rounded font-bold mr-2">{{ timerButtonText }}</button>
          <button @click="resetTimer" class="bg-primary text-white px-6 py-2 rounded font-bold ml-2">Reset</button>
        </div>
        <form @submit.prevent="form.post(route('study-now.store'))">
          <div class="mb-4 items-center justify-center">
            <input type="text" v-model="subject" placeholder="What do you study?">
          </div>
          <div class="mt-4">
            Total Study Duration: {{ totalStudyDuration }} minutes
          </div>
          <div class="button-container">
            <button type="submit" class="bg-primary text-white px-6 py-2 rounded font-bold mt-4">Submit Progress</button>
          </div>
        </form>
      </div>
    </AuthenticatedLayout>
  </template>
  
  <script>
  import { usePage } from "@inertiajs/inertia-vue3";
  import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
  import { Head } from "@inertiajs/vue3";
  import { useForm } from '@inertiajs/inertia-vue3';
  import { Inertia } from '@inertiajs/inertia';
  
  export default {
    data() {
      return {
        studyProgress: '',
        timer: null,
        timeLeft: 25 * 60,
      };
    },
  
    components: {
      AuthenticatedLayout,
      Head,
    },

    setup() {
      const form = useForm({
        totalStudyDuration: '',
        subject: ''
      })
    },
  
    computed: {
      minutes() {
        return Math.floor(this.timeLeft / 60);
      },
      seconds() {
        return (this.timeLeft % 60).toString().padStart(2, '0');
      },
      timerButtonText() {
        return this.timer ? 'Pause' : 'Start';
      },
      totalStudyDuration() {
        const totalMinutes = Math.floor((25 * 60 - this.timeLeft) / 60);
        return totalMinutes;
      },
    },
    methods: {
      toggleTimer() {
        if (this.timer) {
          clearInterval(this.timer);
          this.timer = null;
        } else {
          this.startTimer();
        }
      },
      startTimer() {
        this.timer = setInterval(() => {
          this.timeLeft--;
  
          if (this.timeLeft <= 0) {
            clearInterval(this.timer);
            this.timer = null;
            this.timeLeft = 25 * 60;
            alert('Timer finished!');
          }
        }, 1000);
      },
      resetTimer() {
        clearInterval(this.timer);
        this.timer = null;
        this.timeLeft = 25 * 60;
      },
      async submitProgress() {
        await this.$inertia.post('/progress', { progress: this.studyProgress });
        this.studyProgress = '';
      },
    },
  };
  </script>
  
  
  <style scoped>
  .button-container {
    display: flex;
    justify-content: space-around;
  }
  </style>
  