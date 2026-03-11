import { Calendar, Calendars, ChevronLeft, ChevronUp, Home, Inbox, Package2, Paperclip, Search, Settings, User2 } from "lucide-react"
import {
    Sidebar,
    SidebarContent,
    SidebarGroup,
    SidebarGroupContent,
    SidebarGroupLabel,
    SidebarMenu,
    SidebarMenuButton,
    SidebarMenuItem,
    SidebarMenuSub,
    SidebarMenuSubItem,
} from "./ui/sidebar"
import { DropdownMenu, DropdownMenuContent, DropdownMenuItem, DropdownMenuTrigger } from "./ui/dropdown-menu"
import { router, usePage } from "@inertiajs/react"
import { Calendar1Icon } from "lucide-react"
import { Users } from "lucide-react"
import { Images } from "lucide-react"
import { Collapsible, CollapsibleContent, CollapsibleTrigger } from "./ui/collapsible"

const items = [
    {
        title: "Dashboard",
        url: "/admin/dashboard",
        icon: Home,
    },
    {
        title: "Masjid",
        url: "/admin/masjid",
        icon: Paperclip,
    },
    {
        title: "Programs",
        url: "/admin/events",
        icon: Calendar1Icon,
    },
    {
        title: "Events",
        url: "/admin/clients",
        icon: Calendars,
    },
    {
        title: "Gallery",
        url: "/admin/gallery",
        icon: Images,
    },
    {
        title: "Back To Website",
        url: "/",
        icon: ChevronLeft,
    },
]

export function AppSidebar() {
    const user = usePage().props.auth.user;

    return (
        <Sidebar>
            <SidebarContent>
                <SidebarGroup>
                    <img src="/assets/icon/forkommas.png" className="w-56 rounded-lg mx-auto mt-4 p-10" />
                    <SidebarGroupLabel className="text-lg font-semibold text-center mx-auto mt-2 mb-5">Forkommas</SidebarGroupLabel>
                    <SidebarGroupContent>
                        <SidebarMenu>
                            {items.map((item) => {
                                return (
                                    <SidebarMenuItem key={item.title}>
                                        <SidebarMenuButton asChild>
                                            <a href={item.url} className="mt-2 text-xl ">
                                                <item.icon className="!w-6 !h-6"/>
                                                <span className="">{item.title}</span>
                                            </a>
                                        </SidebarMenuButton>
                                    </SidebarMenuItem>
                                )
                            })}
                        </SidebarMenu>

                    </SidebarGroupContent>
                </SidebarGroup>
            </SidebarContent>

            <DropdownMenu>
                <DropdownMenuTrigger asChild>
                    <SidebarMenuButton className="p-6 text-lg font-medium">
                        <User2 /> {user.name}
                        <ChevronUp className="ml-auto " />
                    </SidebarMenuButton>
                </DropdownMenuTrigger>
                <DropdownMenuContent
                    side="top"
                    className="w-[--radix-popper-anchor-width]"
                >
                    <DropdownMenuItem onClick={() => router.post('/logout')} className="cursor-pointer">
                        Sign out
                    </DropdownMenuItem>
                </DropdownMenuContent>
            </DropdownMenu>
        </Sidebar>
    )
}