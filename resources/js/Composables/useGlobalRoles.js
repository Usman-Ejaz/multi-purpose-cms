import { usePage } from "@inertiajs/vue3";

export function useGlobalRoles() {
    return usePage().props.rolesENUM;
}