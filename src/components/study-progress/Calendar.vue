<template>
    <div class="calendar">
      <div class="calendar-header">
        <button @click="prevMonth">Prev</button>
        <div class="calendar-title">{{ monthName }} {{ year }}</div>
        <button @click="nextMonth">Next</button>
      </div>
      <div class="calendar-grid">
        <div class="day-name" v-for="day in daysOfWeek" :key="day">{{ day }}</div>
        <div
          v-for="day in days"
          :key="day.id"
          :class="['calendar-cell', { 'study-active': day.studyIntensity > 0 }]"
          :style="{ '--intensity': day.studyIntensity }"
        >
          {{ day.date }}
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        date: new Date(),
        daysOfWeek: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        days: [], // Fetch the calendar data for the selected month and year
      };
    },
    computed: {
      monthName() {
        return this.date.toLocaleString('default', { month: 'long' });
      },
      year() {
        return this.date.getFullYear();
      },
    },
    methods: {
      prevMonth() {
        this.date.setMonth(this.date.getMonth() - 1);
        this.days = []; // Fetch the calendar data for the new selected month and year
      },
      nextMonth() {
        this.date.setMonth(this.date.getMonth() + 1);
        this.days = []; // Fetch the calendar data for the new selected month and year
      },
    },
  };
  </script>
  
  <style scoped>
  .calendar {
    /* Add styles for the calendar container */
  }
  
  .calendar-header {
    /* Add styles for the calendar header */
  }
  
  .calendar-title {
    /* Add styles for the calendar title */
  }
  
  .calendar-grid {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 1px;
  }
  
  .day-name {
    /* Add styles for the day names */
  }
  
  .calendar-cell {
    /* Add styles for the calendar cells */
  }
  
  .study-active {
    /* Add styles for active study days (e.g. background-color: cyan) */
    background-color: hsl(180, 100%, calc(50% + var(--intensity) * 25%));
  }
  </style>