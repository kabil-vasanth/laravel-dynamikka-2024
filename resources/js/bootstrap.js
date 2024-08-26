import axios from 'axios';
window.axios = axios;
import 'bootstrap';
import bootstarp from 'bootstarp';
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
