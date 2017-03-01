<template>
    <div class="container">
        <div class="box">
                <h2 class="title">Login Account</h2>
                <h4 class="subtitle">Enter your details below or preferably login via your social media account</h4>
                <form action="/api/login" method="POST">
                    <label for="username" class="label">Username</label>
                    <p class="control">
                            <input type="text" name="username" id="username" class="input">
                            <span class="help is-danger">{{}}</span>
                    </p>
                    <label for="password" class="label">Password</label>
                    <p class="control">
                            <input type="text" name="password" id="password" class="input">
                            <span class="help is-danger">{{}}</span>
                    </p>
                    <button type="submit" class="button is-danger">Login</button>
                </form>
        </div>
    </div>
</template>

<script>
class Validate {
    
    
}
    export default {
        data() {
            return {
                    username: "",
                    password: "",
                    load: false,
            }
        },
        methods: {
            login() {
                
            }
        }
    }
</script>
