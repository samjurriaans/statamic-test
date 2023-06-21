import CPAlpine from "alpinejs";
import Counter from "./components/counter";

window.CPAlpine = CPAlpine;

CPAlpine.prefix("cp-");

CPAlpine.data("counter", Counter);
CPAlpine.start();
