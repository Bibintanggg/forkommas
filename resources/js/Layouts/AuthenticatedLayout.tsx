import ApplicationLogo from '@/Components/ApplicationLogo';
import { AppSidebar } from '@/Components/AppSidebar';
import Dropdown from '@/Components/Dropdown';
import NavLink from '@/Components/NavLink';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink';
import { SidebarProvider } from '@/Components/ui/sidebar';
import { Link, usePage } from '@inertiajs/react';
import { PropsWithChildren, ReactNode, useState } from 'react';

export default function Authenticated({
    header,
    children,
}: PropsWithChildren<{ header?: ReactNode }>) {
    const user = usePage().props.auth.user;

    const [showingNavigationDropdown, setShowingNavigationDropdown] =
        useState(false);

    return (
        <SidebarProvider>
            <AppSidebar />
            <main className='w-full'>
                {children}
            </main>
        </SidebarProvider>
    );
}
