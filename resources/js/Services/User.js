import { useGlobalRoles } from './useGlobalRoles';

export class User {
    constructor(attributes = {}) {
        Object.assign(this, attributes);
    }

    hasRole (...roles) {
        return '';
    }

    hasPermission (...permissions) {

    }
}

