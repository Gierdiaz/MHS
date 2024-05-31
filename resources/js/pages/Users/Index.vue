<template>
    <div>
      <h1>Lista de Usuários</h1>
      <table class="uk-table uk-table-striped">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="user in users" :key="user.id">
            <td>{{ user.name }}</td>
            <td>{{ user.email }}</td>
            <td>
              <button class="uk-button uk-button-default uk-width-1-3 uk-margin-small-bottom" @click="editUser(user)">Editar</button>
              <button class="uk-button uk-button-default uk-width-1-3 uk-margin-small-bottom" @click="deleteUser(user)">Excluir</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>

  <script>
  export default {
    props: {
      users: {
        type: Array,
        required: true
      }
    }
  }
  </script>
