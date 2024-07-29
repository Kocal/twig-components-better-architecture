import {Controller} from "@hotwired/stimulus";
import('./Alert.css');

export default class extends Controller {
    connect() {
        console.log('Alert controller connected!');
    }
}
