<template>
	<div id='merda'>
	<p>{{message}}</p>
	<input v-model='message'>
	</div>
</template>

<script>
	export default{
		data: function(){
			return {
				message: 'Mãe me da um real'
				}
			}
		}
	
</script>

<style scoped>
	p{
		font-size: 20px;
		text-align: center;
	}
</style>