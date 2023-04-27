import firebase from 'firebase/app';
import 'firebase/firestore';
import 'firebase/auth';
import 'firebase/storage';

const firebaseConfig = {
    apiKey: "AIzaSyCQDNQZi7ZC1EhPyHq88jUcXp0IEcLUDAI",
    authDomain: "study-buddy-5c986.firebaseapp.com",
    projectId: "study-buddy-5c986",
    storageBucket: "study-buddy-5c986.appspot.com",
    messagingSenderId: "726153448626",
    appId: "1:726153448626:web:d87ebddd1c709706d58dab"
};

firebase.initializeApp(firebaseConfig);

const db = firebase.firestore();
const auth = firebase.auth();
const storage = firebase.storage();

export { firebase, db, auth, storage };