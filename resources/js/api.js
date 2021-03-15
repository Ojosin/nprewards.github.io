import axios from 'axios'
import store from './store.js'

const $axios = axios.create({
    baseURL:'/api',
    header:{
        'Accept': 'application/json'
    }
});

$axios.interceptors.request.use(
	function (config){	

		const token = store.state.token
		if(token) config.headers.Authorization = `bearer ${token}`;
		return config;
	},
	function (error){
		
		return Promise.reject(error);
	}
)


const errorHandler = (error) => {
    if (isHandlerEnabled(error.config)) {
      // Handle errors
    }
    return Promise.reject({ ...error })
  }
  
  const successHandler = (response) => {
    if (isHandlerEnabled(response.config)) {
      // Handle responses
    }
    return response
  }

  


$axios.interceptors.response.use(function(resp) {
  // Do something with resp data
  return resp;
}, function(error) {
  // Do something with response error
  if(error.response.data.message == "token_expired")
  {
        localStorage.removeItem('token')
        window.location = '/';
  }
  else if(error.response.data.message =="The token could not be parsed from the request")
  {
      localStorage.removeItem('token')
      window.location = '/';
  }
  else if(error.response.data.message == "Wrong number of segments")
  {
      localStorage.removeItem('token')
      window.location = '/'; 
  }
  else
  {
        return Promise.reject(error);
  }
  //return Promise.reject(error);
});

export default $axios