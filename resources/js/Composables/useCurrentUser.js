import { User } from "@/Services/User";
import { usePage } from "@inertiajs/vue3";

export function useCurrentUser() {
    return new User(usePage().props.auth.user);
}