import Home from './pages/Home';
import SinglePost from './posts/single-post'

export const routes = [
  {path: '', component: Home},
  {path: '/post', component: SinglePost}
];
