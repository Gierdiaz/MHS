<template>
    <!-- Navbar Component -->
    <nav class="uk-navbar-container">
        <div class="uk-container">
            <div uk-navbar>
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav ">
                        <li><a :href="route('users.index')">Doctor</a></li>
                        <li><a :href="route('patients.index')">Patient</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: 'Navbar'
};
</script>

<style scoped></style>
