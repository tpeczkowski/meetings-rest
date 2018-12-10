<template>
  <div>
    <ol class="list-group">
      <li v-for="person in list" class="list-group-item">
        {{ person.firstname }}
        {{ person.lastname }}
      </li>
    </ol>
  </div>
</template>

<script>
  export default {
    props: ['list']
  };
</script>
