<template>
  <v-container class="fill-height" fluid>
    <v-row align="center" justify="center">
      <v-col cols="12" sm="8" md="6">
        <v-card class="elevation-12">
          <v-toolbar color="primary" dark flat>
            <v-toolbar-title>Login</v-toolbar-title>
          </v-toolbar>
          <v-card-text>
            <v-form>
              <v-text-field
                v-model="username"
                label="Username"
                required
              ></v-text-field>
              <v-text-field
                v-model="password"
                label="Password"
                type="password"
                required
              ></v-text-field>
              <v-btn
                color="primary"
                block
                @click="login()"
              >
                Login
              </v-btn>
            </v-form>
          </v-card-text>
          <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn
              text
              color="primary"
              @click="logout()"
            >
              Logout
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      username: '',
      password: '',
      isLoggedIn: false,
      user: null
    }
  },
  methods: {
    login() {
      // Perform login validation here, e.g. by making a request to a server
      if (this.username === 'example' && this.password === 'password') {
        this.isLoggedIn = true;
        this.user = {
          firstName: 'John',
          lastName: 'Doe',
          avatar: 'https://dummyimage.com/250x250/000/fff&text=John+Doe',
          hairColor: 'brown'
        }
      } else {
        alert('Incorrect username/password');
      }
    },
    logout() {
      this.isLoggedIn = false;
      this.user = null;
    }
  }
}
</script>

<style scoped>
  /* Custom CSS styles go here */
</style>
