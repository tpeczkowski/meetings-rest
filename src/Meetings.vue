<template>
  <div>
    <div>
      <div v-if="people.length > 0">
        <h1>Participants list</h1>
        <participants-list :list="people"></participants-list>
      </div>
    </div>
    <h3>New participant</h3>
    <new-participant-form @added="addNewParticipant($event)"></new-participant-form>
  </div>
</template>

<script>
  import ParticipantsList from "./ParticipantsList.vue";
  import NewParticipantForm from "./NewParticipantForm.vue";

  export default {
    components: {ParticipantsList, NewParticipantForm},
    data() {
      return {
        people: []
      };
    },
    methods: {
      addNewParticipant(participant) {
        this.people.push(participant);
      }
    }
  };
</script>
