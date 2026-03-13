export * from './auth';

import type { Auth } from './auth';

export type AppPageProps<T extends Record<string, unknown> = Record<string, unknown>> = T & {
    name: string;
    auth: Auth;
    [key: string]: unknown;
};

export interface PaginatedResponse<T> {
    data: T[]
    total: number
    current_page: number
    per_page: number
    last_page: number
}
