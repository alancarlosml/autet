<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUT & T - Sistemas de Automação</title>
    <meta name="description" content="AUT & T Sistemas de Automação LTDA - Comercial, Segurança, Software, IA e LPR em um só lugar.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0F172A;
        }
        h1, h2, h3 {
            font-family: 'Outfit', sans-serif;
        }
        .glass {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .gradient-text {
            background: linear-gradient(135deg, #3B82F6 0%, #22D3EE 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .service-card:hover .icon-box {
            transform: scale(1.1) rotate(5deg);
            background-color: #3B82F6;
        }
    </style>
</head>
<body class="text-slate-200 antialiased overflow-x-hidden">

    <!-- Header -->
    <header class="fixed top-0 left-0 w-full z-50 glass transition-all duration-300">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold tracking-tighter flex items-center gap-2">
                <span class="text-autet-primary">AUT</span><span class="text-autet-accent">&</span><span>T</span>
            </a>
            
            <nav class="hidden md:flex gap-8 items-center text-sm font-medium uppercase tracking-widest">
                <a href="#inicio" class="hover:text-autet-accent transition-colors">Início</a>
                <a href="#servicos" class="hover:text-autet-accent transition-colors">Serviços</a>
                <a href="#tecnologia" class="hover:text-autet-accent transition-colors">Tecnologia</a>
                <a href="#sobre" class="hover:text-autet-accent transition-colors">Sobre</a>
                <a href="#contato" class="px-5 py-2 bg-autet-primary hover:bg-autet-accent transition-all rounded-full text-white">Contato</a>
            </nav>
            
            <button class="md:hidden text-white" id="menuBtn">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="inicio" class="relative min-h-screen flex items-center pt-20 overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-1/2 left-1/4 w-96 h-96 bg-autet-primary/20 rounded-full blur-[120px] -z-10 animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-autet-accent/10 rounded-full blur-[120px] -z-10"></div>
        
        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-8">
                <div class="inline-flex items-center gap-2 px-3 py-1 glass rounded-full text-xs font-semibold text-autet-accent uppercase tracking-tighter">
                    <span class="flex h-2 w-2 rounded-full bg-autet-accent animate-ping"></span>
                    Tecnologia Avançada em Automação
                </div>
                <h1 class="text-5xl md:text-7xl font-bold leading-tight">
                    Inovação que <br> <span class="gradient-text">Transforma</span> <br> Negócios
                </h1>
                <p class="text-lg text-slate-400 max-w-lg leading-relaxed">
                    Especialistas em automação comercial, segurança eletrônica e inteligência artificial. Criamos soluções inteligentes para otimizar sua operação e proteger seu patrimônio.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#contato" class="px-8 py-4 bg-autet-primary hover:bg-blue-600 transition-all rounded-lg font-semibold flex items-center gap-2">
                        Fale com um Especialista
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                    </a>
                    <a href="#servicos" class="px-8 py-4 glass hover:bg-white/10 transition-all rounded-lg font-semibold">
                        Ver Serviços
                    </a>
                </div>
            </div>
            
            <div class="relative hidden md:block">
                <div class="w-full aspect-square glass rounded-3xl p-8 flex items-center justify-center relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-autet-primary/30 to-transparent rounded-3xl"></div>
                    <!-- Technical UI Mockup -->
                    <div class="w-full h-full glass border border-white/10 rounded-2xl overflow-hidden shadow-2xl flex flex-col">
                        <div class="h-10 border-b border-white/10 px-4 flex items-center gap-2">
                            <div class="w-3 h-3 rounded-full bg-red-500/50"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500/50"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500/50"></div>
                            <div class="flex-1"></div>
                            <div class="text-[10px] text-slate-500 font-mono">AUT&T_SYSTEM_v24.0</div>
                        </div>
                        <div class="flex-1 p-6 space-y-4">
                            <div class="h-4 w-3/4 bg-slate-700/50 rounded animate-pulse"></div>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="h-20 glass rounded-lg bg-autet-primary/10"></div>
                                <div class="h-20 glass rounded-lg"></div>
                                <div class="h-20 glass rounded-lg"></div>
                            </div>
                            <div class="h-32 glass rounded-xl border border-autet-accent/20 flex items-center justify-center">
                                <div class="text-xs font-mono text-autet-accent animate-pulse">DETECTING OBJECTS...</div>
                            </div>
                            <div class="h-4 w-full bg-slate-700/30 rounded"></div>
                        </div>
                    </div>
                </div>
                <!-- Float Cards -->
                <div class="absolute -top-6 -right-6 glass p-4 rounded-xl shadow-xl animate-bounce" style="animation-duration: 4s;">
                     <div class="text-2xl font-bold text-autet-accent">AI Ready</div>
                     <div class="text-[10px] text-slate-400">Integrated Systems</div>
                </div>
                <div class="absolute -bottom-6 -left-6 glass p-4 rounded-xl shadow-xl animate-bounce" style="animation-duration: 3s;">
                     <div class="text-2xl font-bold text-white">24/7</div>
                     <div class="text-[10px] text-slate-400">Security Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="servicos" class="py-24 bg-slate-900/50 relative">
        <div class="container mx-auto px-6">
            <div class="text-center space-y-4 mb-20">
                <h2 class="text-autet-accent font-semibold tracking-widest uppercase text-sm">Nossas Especialidades</h2>
                <h3 class="text-4xl md:text-5xl font-bold">Soluções 360° para sua Empresa</h3>
                <p class="text-slate-400 max-w-2xl mx-auto">Oferecemos um ecossistema completo de tecnologia para automatizar processos e garantir a segurança do seu patrimônio.</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="service-card glass p-8 rounded-3xl hover:-translate-y-2 transition-all duration-500 group">
                    <div class="icon-box w-16 h-16 bg-autet-primary/20 rounded-2xl flex items-center justify-center mb-6 transition-all duration-500 text-autet-primary group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-store"><path d="m2 7 4.41-4.41A2 2 0 0 1 7.83 2h8.34a2 2 0 0 1 1.42.59L22 7"/><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"/><path d="M15 22v-4a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v4"/><path d="M2 7h20"/><path d="M22 7v3a2 2 0 0 1-2 2v0a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 16 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 12 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 8 12a2.7 2.7 0 0 1-1.59-.63.7.7 0 0 0-.82 0A2.7 2.7 0 0 1 4 12v0a2 2 0 0 1-2-2V7"/></svg>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Automação Comercial</h4>
                    <p class="text-slate-400 text-sm leading-relaxed">Sistemas de frente de caixa, gestão de estoque e otimização de vendas para comércios de todos os tamanhos.</p>
                </div>

                <!-- Service 2 -->
                <div class="service-card glass p-8 rounded-3xl hover:-translate-y-2 transition-all duration-500 group">
                    <div class="icon-box w-16 h-16 bg-autet-primary/20 rounded-2xl flex items-center justify-center mb-6 transition-all duration-500 text-autet-primary group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-camera"><path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"/><circle cx="12" cy="13" r="3"/></svg>
                    </div>
                    <h4 class="text-xl font-bold mb-4">CFTV & Segurança</h4>
                    <p class="text-slate-400 text-sm leading-relaxed">Instalação e monitoramento de câmeras de alta definição e sistemas de segurança perimetral com cercas elétricas.</p>
                </div>

                <!-- Service 3 -->
                <div class="service-card glass p-8 rounded-3xl hover:-translate-y-2 transition-all duration-500 group">
                    <div class="icon-box w-16 h-16 bg-autet-primary/20 rounded-2xl flex items-center justify-center mb-6 transition-all duration-500 text-autet-primary group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-code-2"><path d="m18 16 4-4-4-4"/><path d="m6 8-4 4 4 4"/><path d="m14.5 4-5 16"/></svg>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Desenvolvimento de Software</h4>
                    <p class="text-slate-400 text-sm leading-relaxed">Softwares sob medida para atender às necessidades específicas do seu negócio, de sistemas ERP a plataformas web.</p>
                </div>

                <!-- Service 4 -->
                <div class="service-card glass p-8 rounded-3xl hover:-translate-y-2 transition-all duration-500 group">
                    <div class="icon-box w-16 h-16 bg-autet-primary/20 rounded-2xl flex items-center justify-center mb-6 transition-all duration-500 text-autet-primary group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-smartphone"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"/><path d="M12 18h.01"/></svg>
                    </div>
                    <h4 class="text-xl font-bold mb-4">App Mobile</h4>
                    <p class="text-slate-400 text-sm leading-relaxed">Criação de aplicativos iOS e Android com foco em experiência do usuário e alta performance.</p>
                </div>

                <!-- Service 5 -->
                <div class="service-card glass p-8 rounded-3xl hover:-translate-y-2 transition-all duration-500 group">
                    <div class="icon-box w-16 h-16 bg-autet-primary/20 rounded-2xl flex items-center justify-center mb-6 transition-all duration-500 text-autet-primary group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-brain"><path d="M9.5 2A2.5 2.5 0 0 1 12 4.5v15a2.5 2.5 0 0 1-4.96.44 2.5 2.5 0 0 1-2.96-3.08 3 3 0 0 1-.34-5.58 2.5 2.5 0 0 1 1.32-4.24 2.5 2.5 0 0 1 4.44-2.54Z"/><path d="M14.5 2A2.5 2.5 0 0 0 12 4.5v15a2.5 2.5 0 0 0 4.96.44 2.5 2.5 0 0 0 2.96-3.08 3 3 0 0 0 .34-5.58 2.5 2.5 0 0 0-1.32-4.24 2.5 2.5 0 0 0-4.44-2.54Z"/></svg>
                    </div>
                    <h4 class="text-xl font-bold mb-4">Inteligência Artificial</h4>
                    <p class="text-slate-400 text-sm leading-relaxed">Soluções de machine learning aplicadas ao seu negócio para análise de dados e automação de decisões.</p>
                </div>

                <!-- Service 6 -->
                <div class="service-card glass p-8 rounded-3xl hover:-translate-y-2 transition-all duration-500 group">
                    <div class="icon-box w-16 h-16 bg-autet-primary/20 rounded-2xl flex items-center justify-center mb-6 transition-all duration-500 text-autet-primary group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scan-text"><path d="M7 2H4a2 2 0 0 0-2 2v3"/><path d="M17 2h3a2 2 0 0 1 2 2v3"/><path d="M2 17v3a2 2 0 0 0 2 2h3"/><path d="M22 17v3a2 2 0 0 1-2 2h-3"/><path d="M7 8h10"/><path d="M7 12h10"/><path d="M7 16h10"/></svg>
                    </div>
                    <h4 class="text-xl font-bold mb-4">LPR (Reconhecimento de Placas)</h4>
                    <p class="text-slate-400 text-sm leading-relaxed">Tecnologia avançada para identificação automática de veículos em acessos, garagens e rodovias.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- AI & LPR Highlight Section -->
    <section id="tecnologia" class="py-24 relative overflow-hidden">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-autet-accent/10 rounded-full blur-[100px]"></div>
        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
            <div class="order-2 md:order-1 glass p-2 rounded-3xl shadow-2xl">
                <div class="bg-slate-900 rounded-2xl p-6 space-y-6">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-lg bg-autet-accent/20 flex items-center justify-center text-autet-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-activity"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                            </div>
                            <span class="text-xs font-bold uppercase tracking-widest text-slate-400">Live Traffic Monitor</span>
                        </div>
                        <span class="text-[10px] text-green-500 font-mono flex items-center gap-1">
                            <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span> ACTIVE
                        </span>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-3 rounded-lg border border-slate-700 bg-slate-800/50">
                            <div class="flex items-center gap-3">
                                <div class="px-2 py-1 bg-slate-700 rounded text-[10px] font-mono">ABC-1234</div>
                                <div class="text-[10px] text-slate-400">Honda Civic - Grey</div>
                            </div>
                            <span class="text-[10px] text-autet-accent">09:12:45</span>
                        </div>
                        <div class="flex items-center justify-between p-3 rounded-lg border border-slate-700 bg-slate-800/50">
                            <div class="flex items-center gap-3">
                                <div class="px-2 py-1 bg-slate-700 rounded text-[10px] font-mono">XYZ-9876</div>
                                <div class="text-[10px] text-slate-400">Toyota Hilux - White</div>
                            </div>
                            <span class="text-[10px] text-autet-accent">09:15:21</span>
                        </div>
                        <div class="flex items-center justify-between p-3 rounded-lg border border-autet-accent/30 bg-autet-accent/5">
                            <div class="flex items-center gap-3">
                                <div class="px-2 py-1 bg-autet-accent/20 rounded text-[10px] font-mono text-autet-accent">VIP-0001</div>
                                <div class="text-[10px] text-autet-accent font-semibold uppercase">Authorized Entry</div>
                            </div>
                            <span class="text-[10px] text-autet-accent">JUST NOW</span>
                        </div>
                    </div>
                    <div class="h-2 w-full bg-slate-800 rounded-full overflow-hidden">
                        <div class="h-full bg-autet-accent w-2/3 animate-[progress_5s_infinite_linear]"></div>
                    </div>
                </div>
            </div>
            <div class="order-1 md:order-2 space-y-8">
                <h3 class="text-4xl font-bold leading-tight">Visão Computacional e <br> <span class="text-autet-accent">Inteligência Real</span></h3>
                <p class="text-slate-400 leading-relaxed">Nossa tecnologia de LPR utiliza algoritmos de Deep Learning proprietários que garantem taxas de assertividade superiores a 99% em diversas condições de iluminação e velocidade.</p>
                <ul class="space-y-4">
                    <li class="flex items-center gap-3">
                        <div class="w-6 h-6 rounded-full bg-autet-primary/20 flex items-center justify-center text-autet-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                        </div>
                        <span>Integração nativa com cancelas e portões</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-6 h-6 rounded-full bg-autet-primary/20 flex items-center justify-center text-autet-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                        </div>
                        <span>Alertas de veículos em lista negra via Telegram/E-mail</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-6 h-6 rounded-full bg-autet-primary/20 flex items-center justify-center text-autet-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                        </div>
                        <span>Geração automática de relatórios de tráfego</span>
                    </li>
                </ul>
                <button class="px-8 py-4 bg-autet-accent/10 border border-autet-accent/50 text-autet-accent hover:bg-autet-accent hover:text-white transition-all rounded-lg font-bold">Saiba mais sobre LPR</button>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="sobre" class="py-24 bg-slate-900/30">
        <div class="container mx-auto px-6 flex flex-col items-center text-center max-w-4xl space-y-12">
            <h3 class="text-4xl font-bold">Por que escolher a <span class="text-autet-primary">AUT & T</span>?</h3>
            <p class="text-xl text-slate-400">Com anos de experiência no mercado de automação, nossa missão é simplificar a complexidade tecnológica para nossos clientes. Somos movidos pelo desafio de criar soluções que não apenas funcionam, mas encantam.</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 w-full">
                <div class="space-y-2">
                    <div class="text-4xl font-bold text-autet-accent">200+</div>
                    <div class="text-xs text-slate-500 uppercase tracking-widest leading-loose">Clientes Satisfeitos</div>
                </div>
                <div class="space-y-2">
                    <div class="text-4xl font-bold text-autet-accent">15+</div>
                    <div class="text-xs text-slate-500 uppercase tracking-widest leading-loose">Anos de Mercado</div>
                </div>
                <div class="space-y-2">
                    <div class="text-4xl font-bold text-autet-accent">1k+</div>
                    <div class="text-xs text-slate-500 uppercase tracking-widest leading-loose">Câmeras Instaladas</div>
                </div>
                <div class="space-y-2">
                    <div class="text-4xl font-bold text-autet-accent">50+</div>
                    <div class="text-xs text-slate-500 uppercase tracking-widest leading-loose">Softwares Customizados</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contato" class="py-24 relative overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="glass max-w-5xl mx-auto rounded-[2rem] overflow-hidden flex flex-col md:flex-row">
                <div class="bg-autet-primary p-12 text-white space-y-8 md:w-2/5">
                    <h3 class="text-3xl font-bold">Vamos conversar?</h3>
                    <p class="text-blue-100/70">Nossa equipe está pronta para desenhar o projeto ideal para seu negócio.</p>
                    
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                            </div>
                            <div>
                                <div class="text-xs font-bold uppercase tracking-widest opacity-60">E-mail</div>
                                <div class="font-medium">contato@autet.com.br</div>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone-call"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/><path d="M14.05 2a9 9 0 0 1 8 8"/><path d="M14.05 6a5 5 0 0 1 4 4"/></svg>
                            </div>
                            <div>
                                <div class="text-xs font-bold uppercase tracking-widest opacity-60">Telefone</div>
                                <div class="font-medium">(11) 99999-9999</div>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                            </div>
                            <div>
                                <div class="text-xs font-bold uppercase tracking-widest opacity-60">Endereço</div>
                                <div class="font-medium text-sm">Rua da Tecnologia, 1000 - Inovação, SP</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="p-12 md:w-3/5 bg-slate-800">
                    @if(session('success'))
                        <div class="bg-green-500/10 border border-green-500/50 p-4 rounded-xl text-green-500 mb-8 flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-circle-2"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="m9 12 2 2 4-4"/></svg>
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-xs font-bold uppercase tracking-widest text-slate-400">Nome Completo</label>
                                <input type="text" name="name" required class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-3 focus:border-autet-primary focus:ring-1 focus:ring-autet-primary outline-none transition-all placeholder:text-slate-600" placeholder="Seu nome">
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold uppercase tracking-widest text-slate-400">E-mail Corporativo</label>
                                <input type="email" name="email" required class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-3 focus:border-autet-primary focus:ring-1 focus:ring-autet-primary outline-none transition-all placeholder:text-slate-600" placeholder="seu@email.com">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-slate-400">Assunto</label>
                            <input type="text" name="subject" required class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-3 focus:border-autet-primary focus:ring-1 focus:ring-autet-primary outline-none transition-all placeholder:text-slate-600" placeholder="Como podemos ajudar?">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-slate-400">Mensagem</label>
                            <textarea name="message" required rows="4" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-3 focus:border-autet-primary focus:ring-1 focus:ring-autet-primary outline-none transition-all placeholder:text-slate-600" placeholder="Descreva brevemente seu projeto..."></textarea>
                        </div>
                        <button type="submit" class="w-full py-4 bg-autet-primary hover:bg-blue-600 transition-all rounded-lg font-bold flex items-center justify-center gap-2">
                            Enviar Mensagem
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-send-horizontal"><path d="m3 21 19-9L3 3v18z"/><path d="M3 12h19"/></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 border-t border-white/5">
        <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="text-xl font-bold tracking-tighter">
                <span class="text-autet-primary">AUT</span><span class="text-autet-accent">&</span><span>T</span> <span class="text-slate-500 font-light text-sm ml-2">Sistemas de Automação LTDA</span>
            </div>
            <div class="flex gap-6 text-sm text-slate-500">
                <a href="#" class="hover:text-white transition-colors">Privacidade</a>
                <a href="#" class="hover:text-white transition-colors">Termos</a>
                <a href="#" class="hover:text-white transition-colors">LinkedIn</a>
            </div>
            <div class="text-xs text-slate-600">
                &copy; {{ date('Y') }} AUT & T. Todos os direitos reservados.
            </div>
        </div>
    </footer>

    <script>
        // Header scroll effect
        const header = document.querySelector('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                header.classList.add('bg-slate-900/90');
                header.classList.remove('py-4');
                header.classList.add('py-2');
            } else {
                header.classList.remove('bg-slate-900/90');
                header.classList.add('py-4');
                header.classList.remove('py-2');
            }
        });

        // Simple Mobile Menu (Log only for now)
        const menuBtn = document.getElementById('menuBtn');
        menuBtn.addEventListener('click', () => {
             console.log('Mobile menu clicked');
             // Add full mobile menu implementation if needed
        });
    </script>
</body>
</html>
