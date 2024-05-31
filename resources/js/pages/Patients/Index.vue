<template>
    <div>
        <!-- Sidebar Component -->
        <Sidebar />

        <!-- Footer Component -->
        <Navbar />
    </div>
</template>

<script>
import Sidebar from '../../components/Sidebar.vue';
import Navbar from '../../components/Navbar.vue';

export default {
    components: {
        Menu,
        Navbar,
    },
    props: {
        patients: {
            type: Array,
            required: true
        }
    },
};
</script>

<style scoped>

</style>
