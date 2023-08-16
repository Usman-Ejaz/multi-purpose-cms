import { usePage } from "@inertiajs/vue3";

export function useGlobalPermissions() {
    return usePage().props.PermissionsENUM;
}