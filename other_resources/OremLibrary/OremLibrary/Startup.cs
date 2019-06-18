using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(OremLibrary.Startup))]
namespace OremLibrary
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
