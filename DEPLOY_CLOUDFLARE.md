# Configuração Cloudflare: autet.com.br

Siga estes passos para configurar seu domínio da AUT & T no Cloudflare:

### 1. Adicionar Site
1.  Aponte seu navegador para [dash.cloudflare.com](https://dash.cloudflare.com).
2.  Clique em **Add a Site** e digite `autet.com.br`.
3.  Selecione o plano **Free** (Gratuito).

### 2. DNS (Aponte para sua VPS)
No painel de DNS do Cloudflare, adicione os seguintes registros:

| Tipo | Nome | Conteúdo (IP da VPS) | Proxy Status |
| :--- | :--- | :--- | :--- |
| **A** | `@` | `SEU_IP_AQUI` | 🟠 Proxied |
| **A** | `www` | `SEU_IP_AQUI` | 🟠 Proxied |

### 3. Trocar Nameservers (DNS)
1.  O Cloudflare fornecerá dois servidores de nomes (ex: `ns1.cloudflare.com`, `ns2.cloudflare.com`).
2.  Vá ao **Registro.br** (ou onde comprou o domínio).
3.  Na seção **DNS**, selecione "Alterar Servidores de Nome" e cole os que o Cloudflare forneceu.
4.  Aguarde a propagação (geralmente < 1 hora).

### 4. SSL/TLS
1.  No painel Cloudflare, vá em **SSL/TLS -> Overview**.
2.  Mude o modo de criptografia para **Full (Strict)**.

> [!TIP]
> Ative o **Always Use HTTPS** em SSL/TLS -> Edge Certificates para garantir segurança máxima.
