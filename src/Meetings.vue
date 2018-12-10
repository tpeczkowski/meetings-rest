<template>
  <div>
    <div>
      <div v-if="people.length > 0">
        <h1>Participants list</h1>
        <participants-list :list="people"></participants-list>
      </div>
    </div>

    <h3>New participant</h3>
    <form @submit.prevent="addNewParticipant()">
      <label>Firstname</label>
      <input type="text" v-model="newPerson.firstname">
      <label>Lastname</label>
      <input type="text" v-model="newPerson.lastname">
      <button>Add new participant</button>
    </form>
  </div>
</template>

<script>
  import ParticipantsList from "./ParticipantsList.vue";

  export default {
    components: {ParticipantsList},
    data() {
      return {
        newPerson: {},
        people: []
      };
    },
    methods: {
      addNewParticipant() {
        this.people.push(this.newPerson);
        this.newPerson = {};
      }
    }
  };
</script>
